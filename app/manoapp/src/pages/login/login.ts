import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { RegisPage } from '../regis/regis';
import { Http } from '@angular/http';
import Url from '../../api/Url'
import TestDao from '../../api/dao/test'
import ProductDao from '../../api/dao/productDao'

/**
 * Generated class for the LoginPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {

  //url: Url

  ///username:string;
  //password:string;

  constructor(public navCtrl: NavController, public navParams: NavParams, private http: Http) {
   // this.url = new Url()
    //console.log(this.url.listAllProduct())
    //this.http.get(this.url.listAllProduct())
      //.subscribe(
        //data => {
          //let products = data.json() as ProductDao[]
          //for(let product of products)
            //console.log(product.name)
       // },
       // err => {
          //console.log(err)
       // }
     // )
     
  

  //ionViewDidLoad() {
  // console.log('ionViewDidLoad LoginPage');{
  //}

//}
  //login() {
  //  console.log("Username: "+ this.username);
  //  console.log("Password: "+ this.password);
  //}
  }
  signUp(){
    this.navCtrl.push(RegisPage);
  }
}
  