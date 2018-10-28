import { Component, ViewChild } from '@angular/core';
import { Platform, Nav, Events, MenuController } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: string = 'HomePage';
  menu: any = [];

  constructor(
    platform: Platform, statusBar: StatusBar,
    splashScreen: SplashScreen,
    private events: Events,
    private menuCtrl: MenuController
  ) {
    this.events.subscribe('menu', (menu) => {
      this.menu = menu
    });

    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();
    });
  }

  openPage(page) {
    if (page == 'nonePage') {
      alert(page)
    } else {
      this.nav.setRoot(page, {}, { animate: true, direction: 'forward' });
    }

    this.menuCtrl.toggle();
  }

  alertMessage(page) {
    alert(page)
  }
}

