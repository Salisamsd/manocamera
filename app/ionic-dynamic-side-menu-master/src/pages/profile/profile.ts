import { Component } from '@angular/core';
import { IonicPage, MenuController, Events } from 'ionic-angular';
import { MENU } from '../../app-side-menu/profileSideMenu'

@IonicPage()
@Component({
  selector: 'page-profile',
  templateUrl: 'profile.html',
})
export class ProfilePage {

  constructor(
    private menuCtrl: MenuController,
    private events: Events
  ) {
    this.menuCtrl.enable(true, 'menu');
    this.events.publish('menu', MENU);
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad ProfilePage');
  }

}
