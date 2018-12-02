import { Component,ViewChild } from '@angular/core';
import { NavController , ModalController ,AlertController, NavParams,ToastController, ViewController } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { Storage } from '@ionic/storage';
import { CartPage } from '../cart/cart';
import { DatePipe } from '@angular/common';
import { dateValueRange } from 'ionic-angular/umd/util/datetime-util';
import { RentPage } from '../rent/rent';
import { RentformPage } from '../rentform/rentform';
import { TabsPage } from '../tabs/tabs';
/**
 * Generated class for the AddCartPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */


@Component({
  selector: 'page-add-cart',
  templateUrl: 'add-cart.html',
})
export class AddCartPage {
item:any;
item_id:any;
img1:any;
item_priceperday:any;
item_name:any;
deposit_1:any;
deposit_2:any;
username:any;
items:any;
total:any;
sdate:any;
edate:any;
value:any;
optionRent:any;
function:any;
@ViewChild("personID") personID;
@ViewChild("optionRent_id") optionRent_id;
  constructor(public alertCtrl: AlertController,private toastCtrl: ToastController,public navCtrl: NavController, public navParams: NavParams,public storage :Storage,public modalCtrl: ModalController,public viewCtrl : ViewController,private http: Http,  public loading: LoadingController) {
    this.item = navParams.data;
    this.username = this.navParams.get('username');
    this.username = navParams.data;
    //this.total = 0.0;
    this.total = this.navParams.get('total');
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.img1 = this.navParams.get('img1');
    this.item_priceperday = this.navParams.get('item_priceperday');
    this.sdate = this.navParams.get('sdate');
    this.edate = this.navParams.get('edate');
    this.deposit_1 =this.navParams.get('deposit_1');
    this.deposit_2 =this.navParams.get('deposit_2');
    this.username = this.navParams.get('username');
    this.username = this.navParams.get('username');
    //this.optionRent = '1';
    //this.optionRent = this.navParams.get('value');
    

  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad AddCartPage');
    console.log(this.navParams.data);
  }
   
  goback() {
    this.navCtrl.pop();
    console.log('Click on button Test Console Log');
  //}
  }
  
 // abbTocart(item){
   // this.navCtrl.push(RentPage,item);
  //}
  abbTocart(){
    //let dropdt = +new Date(this.item.edate);
    //let pickdt = +new Date(this.item.sdate);
    //let daysDiff = Math.round((dropdt-pickdt)/86400000);
    
    //this.navCtrl.setRoot(RentPage,item);
    //console.log(item);
    this.item_id = this.navParams.get('item_id');
    this.item_name = this.navParams.get('item_name');
    this.img1 = this.navParams.get('img1');
    this.item_priceperday = this.navParams.get('item_priceperday');
    this.deposit_1 =this.navParams.get('deposit_1');
    this.deposit_2 =this.navParams.get('deposit_2');
    this.sdate = this.navParams.get('sdate');
    this.edate = this.navParams.get('edate');
   
    //this.optionRent = this.value;
    if(this.personID.value=="" ){

      let alert = this.alertCtrl.create({
    
      title:"โปรดกรอกวันที่รับเครื่อง",
    
      //subTitle:"Country field is empty",
    
      buttons: ['OK']
    
      });
    
      alert.present();
    
    
    }else
    
    if(this.optionRent == undefined ){
  
    let alert = this.alertCtrl.create({
  
    title:"โปรดเลือกรูปแบบการเช่า",
  
    //subTitle:"Country field is empty",
  
    buttons: ['OK']
  
    });
  
    alert.present();
  
   }else
   
    if(this.function == undefined ){
  
    let alert = this.alertCtrl.create({
  
    title:"โปรดอ่านและยอมรับเงื่อนไข",
  
    //subTitle:"Country field is empty",
  
    buttons: ['OK']
  
    });
  
    alert.present();
  
   }else{

    
    var headers = new Headers();
    headers.append("Accept", 'application/json');
    headers.append('Content-Type', 'application/json' );
    let options = new RequestOptions({ headers: headers });
    //let dropdt = +new Date(this.edate.value);
    //let pickdt = +new Date(this.sdate.value);

      let data = {
        
        //daysDiff : Math.round((dropdt-pickdt)/86400000),
        //item_id: this.item_id,
        item_name: this.item_name,
        sdate: this.sdate,
        edate: this.edate,
        total: this.total,
        personID:this.personID.value,
        optionRent:this.optionRent
        //optionRent_id:this.optionRent_id
        //img1: this.img1,
       // item_priceperday : this.item_priceperday,
        //deposit_1 : this.deposit_1,
        //deposit_2 : this.deposit_2,
        //total: this.item_priceperday*Math.round(dropdt-pickdt)/86400000

       // "diffrentDay" : daysDiff
        //total : (this.edate.value - this.sdate.value)
      };

      

 let loader = this.loading.create({
    content: 'Processing please wait...',
  });

 loader.present().then(() => {


  this.http.post('http://manocamera.com/api/rent.php',data,options)
  .map(res => res.json())
  .subscribe(res => {
  console.log(res)
   loader.dismiss()
  if(res=="คิวว่าง"){
   
    let alert = this.alertCtrl.create({
      title:"ทำรายการเช่าสำเร็จ",
     // subTitle:(res),
      buttons: ['OK']
      });
     
      alert.present();
     this.navCtrl.push(TabsPage,data);
     console.log(data);
  }else
  {
   let alert = this.alertCtrl.create({
   title:"ไม่มีมีคิวว่าง",
   //subTitle:"กรุณากดโอเค",
   buttons: ['OK']
   });
  
   alert.present();
   
    } 
  });
  });
   }
  
  
  }
  checkdetail(){
  
    this.modalCtrl.create(RentformPage).present();
  }
}
    //this.storage.get("cart").then((data) =>{
     // console.log(data);
     // if(data == null || data.lenght == 0){
     //  data = [];
     ///  data.push({"item" : item,
     // "qty" : 1,
      //   "amount":(item.item_priceperday),
          
      //  });
     // }else{
        //  let added = 0;
          //for(let i = 0 ; i < data.lenght ; i++ ){
          //  if(item.item_id = data[i].item.item_id){
           //  console.log("เพิ่มลงตระกร้าแล้ว");
            //  let qty = data[i].qty;
            //  data[i].qty = qty+1;
            // data[i].amount = parseFloat(data[i].amount) + parseFloat(data[i].item.item_priceperday);
            //  added = 1;

          //    
          //  }
         // }
          //if(added==0){data.push({
            //  "item" : item,
           //  "qty" : 1,
             // "amount":parseFloat(item.item_priceperday),
             // "diffrentDay" : daysDiff
           // });
      //   }
   // }

    // this.storage.set("cart",data).then( ()=>{
     //   
     //   console.log("Cart Update");
     //  console.log(data);

      //  let toast = this.toastCtrl.create({
       //   message: 'Cart Updated',
      //    duration: 3000,
       //   position: 'top'
      //  }); toast.present();
      
   // })


   // });
       //   }

    
 