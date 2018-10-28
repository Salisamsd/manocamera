import { Component } from '@angular/core';
import { IonicPage, MenuController, NavController } from 'ionic-angular';

@IonicPage()
@Component({
  selector: 'page-about',
  templateUrl: 'about.html',
})
export class AboutPage {

  constructor(
    private navCtrl: NavController,
    private menuCtrl: MenuController
  ) {
    this.menuCtrl.enable(false, 'menu');
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AboutPage');
  }

  gotoHomePage() {
    this.navCtrl.setRoot('HomePage', { animate: true, direction: 'forward' });
  }

}
