import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { AboutPage } from '../about/about';
import { ContactPage } from '../contact/contact';
import { HomePage } from '../home/home';
import { RentPage } from '../rent/rent';
@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {
  data:any;
  username:any;
  items:any;
  
  tab1Root =HomePage;
  tab2Root = AboutPage;
  tab3Root = ContactPage;
 
  constructor(public navParams: NavParams) {

      
  }
}
