import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import {Http}  from "@angular/http";
import { Observable } from 'rxjs/Observable';
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

  constructor(public navCtrl: NavController, public navParams: NavParams,private http: Http) {
    this.http.get('http://manocamera.com/api/list_all_product.php')
    .map(res => res.json())
    .subscribe(data =>
    {
      this.items = data["data"]; 
    });
  }
}

       