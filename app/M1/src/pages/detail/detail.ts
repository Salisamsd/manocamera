import { Component,ViewChild } from '@angular/core';
import { NavController , AlertController , NavParams } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { AddCartPage } from '../add-cart/add-cart';

/**
 * Generated class for the DetailPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */


@Component({
  selector: 'page-detail',
  templateUrl: 'detail.html',
})
export class DetailPage {
item:any;
item_id:any;
img1:any;
item_priceperday:any;
item_name:any;
deposit_1:any;
deposit_2:any;
data:any;
total:any;

@ViewChild("sdate") sdate;
@ViewChild("edate") edate;
  constructor(public navCtrl: NavController, public navParams: NavParams,  private http: Http,  public loading: LoadingController, public alertCtrl: AlertController) {
    this.item = navParams.data;
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.img1 = this.navParams.get('img1');
    this.item_priceperday = this.navParams.get('item_priceperday');
    this.deposit_1 =this.navParams.get('deposit_1');
    this.deposit_2 =this.navParams.get('deposit_2');

    

  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad DetailPage');
    console.log(this.navParams.data);
  }
 
  checkque(){
    
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.img1 = this.navParams.get('img1');
    this.item_priceperday = this.navParams.get('item_priceperday');
    this.deposit_1 =this.navParams.get('deposit_1');
    this.deposit_2 =this.navParams.get('deposit_2');
    if(this.sdate.value=="" ){

      let alert = this.alertCtrl.create({
    
      title:"โปรดกรอกวันที่รับเครื่อง",
    
      //subTitle:"Country field is empty",
    
      buttons: ['OK']
    
      });
    
      alert.present();
    
       } else
    
      if(this.edate.value==""){
    
      let alert = this.alertCtrl.create({
    
      title:"โปรดกรอกวันที่คืนเครื่อง",
    
      //subTitle:"Country field is empty",
    
      buttons: ['OK']
    
      });
    
      alert.present();
    
     }else{

    
    var headers = new Headers();
    headers.append("Accept", 'application/json');
    headers.append('Content-Type', 'application/json' );
    let options = new RequestOptions({ headers: headers });


      let data = {
        item_id: this.item_id,
        item_name: this.item_name,
        sdate: this.sdate.value,
        edate: this.edate.value,
        img1: this.img1,
        item_priceperday : this.item_priceperday,
        deposit_1 : this.deposit_1,
        deposit_2 : this.deposit_2,
        //total : (this.edate.value - this.sdate.value)
      };

      

 let loader = this.loading.create({
    content: 'Processing please wait...',
  });

 loader.present().then(() => {


  this.http.post('http://manocamera.com/Newcq.php',data,options)
  .map(res => res.json())
  .subscribe(res => {
  console.log(res)
   loader.dismiss()
  if(res=="คิวว่าง"){
   
    let alert = this.alertCtrl.create({
      title:"มีคิวว่าง",
      subTitle:(res),
      buttons: ['OK']
      });
     
      alert.present();
      this.navCtrl.push(AddCartPage,data);
  }else
  {
   let alert = this.alertCtrl.create({
   title:"ไม่มีมีคิวว่าง",
   subTitle:"กรุณากดโอเค",
   buttons: ['OK']
   });
  
   alert.present();
   
    } 
  });
  });
   }
  
  }
}
