import { Component,ViewChild } from '@angular/core';
import { NavController , AlertController , NavParams } from 'ionic-angular';
import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import { ProfilePage } from '../profile/profile';
@Component({
  selector: 'page-contact',
  templateUrl: 'contact.html'
})
export class ContactPage {
  data:any;
  username:any;
  items:any;
  telephone:any;
  email:any;
    constructor(public navCtrl: NavController, public navParams: NavParams,  private http: Http,  public loading: LoadingController) {
      this.username = this.navParams.get('username');
      this.username = navParams.data;
    }

    ionViewDidLoad() {
  
      console.log('ionViewDidLoad ContactPage');
      console.log(this.navParams.data);
    }

    
    ngOnInit(){
  
      this.username = this.navParams.get('username');
  
     
  
  var headers = new Headers();
  
  headers.append("Accept", 'application/json');
  
  headers.append('Content-Type', 'application/json' );
  
  let options = new RequestOptions({ headers: headers });
  
  let data = {
  
      username: this.username
  
       };
  
  let loader = this.loading.create({
  
  content: 'Processing please wait...',
  
  });
  
  loader.present().then(() => {
  
  this.http.post('http://manocamera.com/retrieve_data.php',data, options)
  
  .map(res => res.json())
  
      .subscribe(res => {
  
       loader.dismiss()
  
      this.items=res.server_response;
  
      console.log(this.items);
  
      });
  
      });
  
       }
  
       editPost(item){

        this.navCtrl.push(ProfilePage,item)
        
          }
}
