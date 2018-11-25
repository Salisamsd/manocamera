import { Component } from '@angular/core';
import { NavController, NavParams,ViewController } from 'ionic-angular';
import { Storage } from '@ionic/storage';
import { CheckoutPage } from '../checkout/checkout';
import { HomePage } from '../home/home';
/**
 * Generated class for the CartPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */


@Component({
  selector: 'page-cart',
  templateUrl: 'cart.html',
})
export class CartPage {
  data:any;
  username:any;
  cartItems : any [] = [];
  total :any;
  showEmptyCartMessage:boolean=false;
  chooseRent:any;

  item_id:any;
  img1:any;
  item_priceperday:any;
  item_name:any;
  deposit_1:any;
  deposit_2:any;
  sdate:any;
  edate:any;

  constructor(public navCtrl: NavController, public navParams: NavParams,public storage :Storage,public viewCtrl : ViewController ) {
  
  this.total = 0.0;

    this.storage.ready().then(()=>{
       this.storage.get("cart").then( (data)=>{
         this.cartItems = data ;
         console.log(this.cartItems);
         
         if(this.cartItems.length > 0){
           this.cartItems.forEach ( (item, index )=>{
            this.total = this.total+(item.item.item_priceperday * item.diffrentDay)
            
           })
         }else{
           this.showEmptyCartMessage = true ;
         }
       })
    })
     
  }
  ionViewDidLoad() {
  
    console.log('ionViewDidLoad CartPage');
    console.log(this.navParams.data);
  }
  removeFromCart(item,i){
    
    let price = item.item.item_priceperday;
    let qty = item.qty;

    this.cartItems.splice(i,1);
    this.storage.set("cart",this.cartItems).then( ()=>{
      this.total = this.total - (price * qty );
    });
     if(this.cartItems.length == 0){
       this.showEmptyCartMessage = true;
     }
  }
  closeModal(){
    this.viewCtrl.dismiss();
  }
  checkout(){
    this.storage.get("cart").then( (data)=>{

      if(data != null){
        
           this.navCtrl.push(CheckoutPage);
      }else{
            
        
      }
    })    
  
   }
  
  
  
}
