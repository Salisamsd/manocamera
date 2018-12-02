import { Component, ViewChild } from '@angular/core';

import { IonicPage, NavController, NavParams , AlertController, DateTime} from 'ionic-angular';

import {Http, Headers, RequestOptions}  from "@angular/http";

import { LoadingController } from 'ionic-angular';

import { Camera, CameraOptions } from '@ionic-native/camera';
  import { FileTransfer, FileUploadOptions, FileTransferObject } from '@ionic-native/file-transfer';
  import { File } from '@ionic-native/file';
import { dateDataSortValue } from 'ionic-angular/umd/util/datetime-util';

/**
 * Generated class for the UpimagePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@Component({
  selector: 'page-upimage',
  templateUrl: 'upimage.html',
})
export class UpimagePage {
  
  data:any;
  
   username:any;
   myphoto:any;
  @ViewChild("newtelephone")newtelephone;
  @ViewChild("newemail")newemail;

  constructor(public navCtrl: NavController, public alertCtrl: AlertController, public navParams: NavParams,  private http: Http,private camera: Camera, private transfer: FileTransfer, private file: File, private loadingCtrl:LoadingController) {
  this.username = this.navParams.get('username') ;

  }
  ionViewDidLoad() {
    console.log('ionViewDidLoad UpimagePage');
    console.log(this.navParams.data);
  }

  
    takePhoto(){
      const options: CameraOptions = {
        quality: 70,
        destinationType: this.camera.DestinationType.DATA_URL,
        encodingType: this.camera.EncodingType.JPEG,
        mediaType: this.camera.MediaType.PICTURE
      }
  
      this.camera.getPicture(options).then((imageData) => {
        // imageData is either a base64 encoded string or a file URI
        // If it's base64:
        this.myphoto = 'data:image/jpeg;base64,' + imageData;
        this.username = this.navParams.get('username') ;
      }, (err) => {
        // Handle error
      });
    }
  
    getImage() {
      const options: CameraOptions = {
        quality: 70,
        destinationType: this.camera.DestinationType.DATA_URL,
        sourceType: this.camera.PictureSourceType.PHOTOLIBRARY,
        saveToPhotoAlbum:false
      }
  
      this.camera.getPicture(options).then((imageData) => {
        // imageData is either a base64 encoded string or a file URI
        // If it's base64:
        this.myphoto = 'data:image/jpeg;base64,' + imageData;
        this.username = this.navParams.get('username') ;
      }, (err) => {
        // Handle error
      });
    }
  
    cropImage() {
      const options: CameraOptions = {
        quality: 70,
        destinationType: this.camera.DestinationType.DATA_URL,
        sourceType: this.camera.PictureSourceType.PHOTOLIBRARY,
        saveToPhotoAlbum: false,
        allowEdit:true,
        targetWidth:300,
        targetHeight:300
      }
  
      this.camera.getPicture(options).then((imageData) => {
        // imageData is either a base64 encoded string or a file URI
        // If it's base64:
        this.myphoto = 'data:image/jpeg;base64,' + imageData;
        this.username = this.navParams.get('username') ;
      }, (err) => {
        // Handle error
      });
    }
  
    uploadImage(){
      
      //Show loading
      this.username = this.navParams.get('username') ;

      let loader = this.loadingCtrl.create({
        content: "Uploading..."
      });
      loader.present();
  
      //create file transfer object
      const fileTransfer: FileTransferObject = this.transfer.create();
  
      //random int
      var random = Math.floor(Math.random() * 100);
      var today = new Date().toISOString(); 
      var username =this.username
      //option transfer
      let options: FileUploadOptions = {
        fileKey: 'photo',
        fileName: "myImage_" + username + random + today +".jpg",//
        chunkedMode: false,
        httpMethod: 'post',
        mimeType: "image/jpeg",
        headers: {},
      };
      

      //file transfer action
      fileTransfer.upload(this.myphoto,'http://www.manocamera.com/api/uploadFoto.php',options,this.username)
        .then((data) => {
          alert("Success");
          loader.dismiss();
        }, (err) => {
          console.log(err);
          alert("Error");
          loader.dismiss();
        });
    }
  
  }
  