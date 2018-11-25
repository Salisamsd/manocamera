import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams,ModalController,ToastController,ViewController } from 'ionic-angular';
import { Storage } from '@ionic/storage';
import { CartPage } from '../cart/cart';
import { DatePipe } from '@angular/common';
import { dateValueRange } from 'ionic-angular/umd/util/datetime-util';
/**
 * Generated class for the AddCartPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-add-cart',
  templateUrl: 'add-cart.html',
})
export class AddCartPage {
item:any;

  constructor(private toastCtrl: ToastController,public navCtrl: NavController, public navParams: NavParams,public storage :Storage,public modalCtrl: ModalController,public viewCtrl : ViewController) {
    this.item = navParams.data;
  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad AddCartPage');
    console.log(this.navParams.data);
  }

  abbTocart(item){
    let dropdt = +new Date(this.item.edate);
    let pickdt = +new Date(this.item.sdate);
    let daysDiff = Math.round((dropdt-pickdt)/86400000);

    this.storage.get("cart").then((data) =>{
      //console.log(data);
      if(data == null || data.lenght == 0){
        data = [];
        data.push({
          "item" : item,
          "qty" : 1,
          "amount":(item.item_priceperday),
          
        });
      }else{
          let added = 0;
          for(let i = 0 ; i < data.lenght ; i++ ){
            if(item.item_id = data[i].item.item.item_id){
              console.log("เพิ่มลงตระกร้าแล้ว");
              let qty = data[i].qty;
              data[i].qty = qty+1;
              data[i].amount = parseFloat(data[i].amount) + parseFloat(data[i].item.item_priceperday);
              added = 1;
            }
          }
          if(added==0){
            data.push({
              "item" : item,
              "qty" : 1,
              //"amount":parseFloat(item.item.item_priceperday),
              "diffrentDay" : daysDiff
            });
          }
      }

      this.storage.set("cart",data).then( ()=>{
        console.log("Cart Update");
        console.log(data);

        let toast = this.toastCtrl.create({
          message: 'Cart Updated',
          duration: 3000,
          position: 'top'
        }); toast.present();
      
      })


    });
}
    //openCart(){
     // this.modalCtrl.create(CartPage).present();
      
    
 // }
 goback() {
  this.navCtrl.pop();
  console.log('Click on button Test Console Log');
}
}
