import { Component, ViewChild } from '@angular/core';

import { IonicPage, NavController, NavParams , AlertController} from 'ionic-angular';

import {Http, Headers, RequestOptions}  from "@angular/http";

import { LoadingController } from 'ionic-angular';

import 'rxjs/add/operator/map';

import { ContactPage } from '../contact/contact';
import { HomePage } from '../home/home';

@IonicPage()
@Component({

  selector: 'page-profile',

  templateUrl: 'profile.html',

})

export class ProfilePage {

items:any;
data:any;

username:any;
telephone:any;
email:any;

oldTelephoneValue:any;
oldEmailValue:any;

@ViewChild("newtelephone")newtelephone;
@ViewChild("newemail")newemail;
  constructor(public navCtrl: NavController, public alertCtrl: AlertController, public navParams: NavParams,  private http: Http,  public loading: LoadingController) {
  }
  ngOnInit(){
    this.username = this.navParams.get('username');
    
    this.telephone = this.navParams.get('telephone') ;

    this.email = this.navParams.get('email') ;

    this.oldTelephoneValue = this.navParams.get('telephone') ;

    this.oldEmailValue = this.navParams.get('email') ;

  }

  Edit(){
    if(this.newtelephone.value=="" ){

      let alert = this.alertCtrl.create({
    
      title:"ATTENTION",
    
      subTitle:"Country field is empty",
    
      buttons: ['OK']
    
      });
    
      alert.present();
    
       } else
    
      if(this.newemail.value==""){
    
      let alert = this.alertCtrl.create({
    
      title:"ATTENTION",
    
      subTitle:"Country field is empty",
    
      buttons: ['OK']
    
      });
    
      alert.present();
    
     }else{
      var headers = new Headers();

      headers.append("Accept", 'application/json');
 
      headers.append('Content-Type', 'application/json');
 
      let options = new RequestOptions({ headers: headers });
 
    let data = {
 
          telephone: this.oldTelephoneValue,
 
          email: this.oldEmailValue,
 
          newemail: this.newemail.value,
 
          newtelephone: this.newtelephone.value,
 
        };
 
   let loader = this.loading.create({
 
      content: 'Processing please wait…',
 
    });
 
   loader.present().then(() => {
 
  this.http.post('http://manocamera.com/edit_data.php',data, options)
 
  .map(res => res.json())
 
  .subscribe(res => {
 
   loader.dismiss()
 
  if(res=='data updated successfully'){
 
    let alert = this.alertCtrl.create({
 
      title:'CONGRATS',
 
      subTitle:(res),
 
      buttons: ['OK']
 
      });
 
      alert.present();
 
   this.navCtrl.push(ContactPage);
 
  }else
 
  {
 
   let alert = this.alertCtrl.create({
 
   title:'ERROR',
 
   subTitle:('Canot update'),
 
   buttons: ['OK']
 
   });
 
   alert.present();
 
    }
     
  });
});
     }
    }
  }
 