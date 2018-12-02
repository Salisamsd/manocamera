import { Component, ViewChild  } from '@angular/core';
import { IonicPage, NavController, NavParams, Slides,Platform  } from 'ionic-angular';
import {Http}  from "@angular/http";
import { Observable } from 'rxjs/Observable';
import { DetailPage } from '../detail/detail';
/**
 * Generated class for the DslrPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */


@Component({
  selector: 'page-dslr',
  templateUrl: 'dslr.html',
})
export class DslrPage {
   items:any=[];
   items1:any=[];
   items2:any=[];
   items3:any=[];
   choice: string = "body";
  isAndroid: boolean = false;
  data:any;
  username:any;
  telephone:any;
  email:any;
  constructor(public navCtrl: NavController, public navParams: NavParams,private http: Http,platform: Platform) {
    this.username = this.navParams.get('username');
    this.username = navParams.data;
    this.isAndroid = platform.is('android');
    
    this.http.get('http://manocamera.com/api/list_all_product.php')
    .map(res => res.json())
    .subscribe(data =>
    {
      this.items = data["data"]; 
    });

    this.http.get('http://manocamera.com/api/list_dslr_BL.php')
    .map(res => res.json())
    .subscribe(data =>
    {
      this.items1 = data["data"]; 
    });

    this.http.get('http://manocamera.com/api/list_dslr_L.php')
    .map(res => res.json())
    .subscribe(data =>
    {
      this.items2 = data["data"]; 
    });

    this.http.get('http://manocamera.com/api/list_dslr_A.php')
    .map(res => res.json())
    .subscribe(data =>
    {
      this.items3 = data["data"]; 
    });
    

  }

  detail(item){
    let data = {
      username: this.username
      
    };
  
  this.navCtrl.push(DetailPage,{item,data})
  
    }
    
    }   