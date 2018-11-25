import { Component, ViewChild } from '@angular/core';

import { IonicPage, NavController, NavParams , AlertController} from 'ionic-angular';

import {Http, Headers, RequestOptions}  from "@angular/http";

import { LoadingController } from 'ionic-angular';

import { Camera, CameraOptions } from '@ionic-native/camera';

/**
 * Generated class for the UpimagePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-upimage',
  templateUrl: 'upimage.html',
})
export class UpimagePage {
  items:any;
  data:any;
  
  username:any;
  telephone:any;
  email:any;
  
  oldTelephoneValue:any;
  oldEmailValue:any;
  myphoto:any;
  @ViewChild("newtelephone")newtelephone;
  @ViewChild("newemail")newemail;

  constructor(public navCtrl: NavController, public alertCtrl: AlertController, public navParams: NavParams,  private http: Http,  public loading: LoadingController,private camera: Camera) {
  
  this.username = this.navParams.get('username') ;

  this.email = this.navParams.get('email') ;}
  ionViewDidLoad() {
    console.log('ionViewDidLoad UpimagePage');
    console.log(this.navParams.data);
  }
  takePhoto(){
    const options: CameraOptions = {
      quality: 70,
      destinationType: this.camera.DestinationType.FILE_URI,
      encodingType: this.camera.EncodingType.JPEG,
      mediaType: this.camera.MediaType.PICTURE
    }
    
    this.camera.getPicture(options).then((imageData) => {
     // imageData is either a base64 encoded string or a file URI
     // If it's base64 (DATA_URL):
     let myphoto = 'data:image/jpeg;base64,' + imageData;
    }, (err) => {
     // Handle error
    });
  }
  getPhoto(){
    const options: CameraOptions = {
      quality: 70,
      destinationType: this.camera.DestinationType.FILE_URI,
      sourceType:this.camera.PictureSourceType.PHOTOLIBRARY,
      saveToPhotoAlbum:false
    }
    
    this.camera.getPicture(options).then((imageData) => {
     // imageData is either a base64 encoded string or a file URI
     // If it's base64 (DATA_URL):
     let myphoto = 'data:image/jpeg;base64,' + imageData;
    }, (err) => {
     // Handle error
    });
  }
}
