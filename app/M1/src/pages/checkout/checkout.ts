import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { Storage } from '@ionic/storage';
import { CheckdetailPage } from '../checkdetail/checkdetail';
import { Observable } from 'rxjs/Observable';
/**
 * Generated class for the CheckoutPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-checkout',
  templateUrl: 'checkout.html',
})
export class CheckoutPage {
  data:any;
  username:any;
  items:any;
  newOrder : any;
  paymentMethods:any[];
  paymentMethod:any;
  Url:any;
  constructor(public navCtrl: NavController, public navParams: NavParams,public storage :Storage,  private http: Http,  public loading: LoadingController) {
  this.username = this.navParams.get('username');
  this.username = navParams.data;
  
  this.newOrder ={};
  

  this.paymentMethods =[
    { method_id:"1",method_title:"รูปแบบที่ 1 ยื่นเอกสาร"},
    { method_id:"2",method_title:"รูปแบบที่ 2 ไม่ยื่นเอกสาร"}
  ];
  this.Url = ({
    url:"http://manocamera.com/api/list_all_product.php"
  });
}
  listRent(){
    let orderItems:any[] = [];
    let data: any = {};

    let paymentData:any = {};

    this.paymentMethods.forEach( (element,index) =>{
      if(element.id == this.paymentMethod){
        paymentData = element;
      }
      
    });

    data ={
      payment_details:{
        method_id :paymentData.method_id,
        method_title : paymentData.method_title,
        paid:true
      },
          username:this.username,
          line_items:orderItems
    };
    if(paymentData.method_id == "1"){

    }else{
      this.storage.get("cart").then( (cart) =>{
        cart.forEach((element,index)=>{
          orderItems.push({
            item_id:element.item.item_id,
            quantity:element.qty
          });
        });

        //data.line_items = orderItems;
        //let orderData:any ={};
        //orderData.order = data;
      
        
        
      })
    }
  }
ionViewDidLoad() {
   console.log('ionViewDidLoad CheckoutPage');
   console.log(this.navParams.data);
    }
  }
