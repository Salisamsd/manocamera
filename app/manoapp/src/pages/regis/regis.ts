import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {LoginProvider} from '../../providers/login/login';
import {HomePage} from '../home/home';
/**
 * Generated class for the RegisPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-regis',
  templateUrl: 'regis.html',
})
export class RegisPage {
  responseData : any;
  userData = {"username": "","password": "", "name": "","email": ""};
  constructor(public navCtrl: NavController, public loginProvider: LoginProvider) {
  }
  
  signup(){
    this.loginProvider.postData(this.userData,'signup').then((result) => {
     this.responseData = result;
     if(this.responseData.userData){
     console.log(this.responseData);
     localStorage.setItem('userData', JSON.stringify(this.responseData));
     this.navCtrl.push(HomePage);
     }
     else{ console.log("User already exists"); }
   }, (err) => {
     // Error log
   });

 
}
  ionViewDidLoad() {
    console.log('ionViewDidLoad RegisPage');
  }

}
