import { Component } from '@angular/core';
import { IonicPage, Events, MenuController } from 'ionic-angular';
import { MENU } from '../../app-side-menu/homeSideMenu';

@IonicPage()
@Component({
  selector: 'page-home',
  templateUrl: 'home.html',
})
export class HomePage {

  constructor(
    private menuCtrl: MenuController,
    private events: Events
  ) {
    this.menuCtrl.enable(true, 'menu');
    this.events.publish('menu', MENU);
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad HomePage');
  }

}
