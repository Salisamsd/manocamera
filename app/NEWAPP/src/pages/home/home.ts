import { Component,ViewChild,} from '@angular/core';
import { NavController , AlertController , NavParams } from 'ionic-angular';
import { ContactPage } from '../contact/contact';
import { WelcomePage } from '../welcome/welcome';
import { DslrPage } from '../dslr/dslr';

import {Http, Headers, RequestOptions}  from "@angular/http";
import { LoadingController } from 'ionic-angular';
import 'rxjs/add/operator/map';
import { MenuController } from 'ionic-angular';
import {App} from 'ionic-angular';
@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  data:any;
  username:any;
  items:any;
  telephone:any;
  email:any;
  constructor(public app: App,public navCtrl: NavController, public navParams: NavParams,  private http: Http,  public loading: LoadingController,public menuCtrl: MenuController,public alertCtrl: AlertController,) {
    this.username = this.navParams.get('username');
    this.username = navParams.data;
  }

  ionViewDidLoad() {

    console.log('ionViewDidLoad HomePage');
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

    
    goDslr(){
      let data = {
  
        username: this.username
    
         };
    
 
        this.navCtrl.push(DslrPage,data);
        
        
    }
    logout() {
      this.app.getRootNav().setRoot( WelcomePage );
    }
  
  }