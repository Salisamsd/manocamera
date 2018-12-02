import { Component,ViewChild } from '@angular/core';
import { NavController , AlertController , NavParams } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { ContactPage } from '../contact/contact';
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
item_name:any;
data:any;
username:any;
@ViewChild("sdate") sdate;
@ViewChild("edate") edate;
  constructor(public navCtrl: NavController, public navParams: NavParams,  private http: Http,  public loading: LoadingController, public alertCtrl: AlertController) {
    this.item = navParams.data;
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.username = this.navParams.get('username');
      this.username = navParams.data;
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad DetailPage');
    console.log(this.navParams.data);
  }
  checkque(){
  
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.username = this.navParams.get('username');
    var headers = new Headers();
    headers.append("Accept", 'application/json');
    headers.append('Content-Type', 'application/json' );
    let options = new RequestOptions({ headers: headers });


      let data = {
        item_id: this.item_id,
        item_name: this.item_name,
        sdate: this.sdate.value,
        edate: this.edate.value,
        username:this.username
      };

      

 let loader = this.loading.create({
    content: 'Processing please wait...',
  });

 loader.present().then(() => {


  this.http.post('http://manocamera.com/api/Newcq.php',data,options)
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
      this.navCtrl.setRoot(ContactPage,data);
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
  
