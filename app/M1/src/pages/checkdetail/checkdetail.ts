import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { Storage } from '@ionic/storage';
/**
 * Generated class for the CheckdetailPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */


@Component({
  selector: 'page-checkdetail',
  templateUrl: 'checkdetail.html',
})
export class CheckdetailPage {
  data:any;
  username:any;
  cartItems : any [] = [];
  total :any;
  items:any;
  constructor(public navCtrl: NavController, public navParams: NavParams,public storage :Storage,  private http: Http,  public loading: LoadingController) {
    this.username = this.navParams.get('username');
    this.username = navParams.data;
    this.total = 0.0;
    this.storage.ready().then(()=>{
      this.storage.get("cart").then( (data)=>{
        this.cartItems = data ;
          console.log(this.cartItems);
          
          if(this.cartItems.length > 0){
            this.cartItems.forEach ( (item, index )=>{
             this.total = this.total+(item.item.total)
             
            })
          }else{
            //this.showEmptyCartMessage = true ;
          }
     // if(this.cartItems.length > 0){
       // this.cartItems.forEach ( (item, index )=>{
         //this.total = this.total+(item.item.item_priceperday * item.diffrentDay)
         
       // })
     // }else{
        
      //}
    })
 })
}

  ionViewDidLoad() {
    console.log('ionViewDidLoad CheckdetailPage');
    console.log(this.navParams.data);
  }

}
