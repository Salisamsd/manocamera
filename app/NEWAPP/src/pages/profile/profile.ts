import { Component, ViewChild } from "@angular/core";

import {
  IonicPage,
  NavController,
  NavParams,
  AlertController
} from "ionic-angular";

import { Http, Headers, RequestOptions } from "@angular/http";

import { LoadingController } from "ionic-angular";

import "rxjs/add/operator/map";

import { ContactPage } from "../contact/contact";
import { HomePage } from "../home/home";

@IonicPage()
@Component({
  selector: "page-profile",

  templateUrl: "profile.html"
})
export class ProfilePage {
  items: any;
  data: any;

  username: any;
  telephone: any;
  email: any;

  oldTelephoneValue: any;
  oldEmailValue: any;

  @ViewChild("newtelephone") newtelephone;
  @ViewChild("newemail") newemail;
  constructor(
    public navCtrl: NavController,
    public alertCtrl: AlertController,
    public navParams: NavParams,
    private http: Http,
    public loading: LoadingController
  ) {
    this.telephone = this.navParams.get("telephone");

    this.email = this.navParams.get("email");

    this.username = this.navParams.get("username");
  }
  ionViewWillEnter() {
    this.load();

    console.log(this.navParams.data);
  }
  load() {
    this.username = this.navParams.get("username");

    var headers = new Headers();

    headers.append("Accept", "application/json");

    headers.append("Content-Type", "application/json");

    let options = new RequestOptions({ headers: headers });

    let data = {
      username: this.username
    };

    let loader = this.loading.create({
      //content: 'Processing please wait...',
    });

    loader.present().then(() => {
      this.http
        .post("http://manocamera.com/api/retrieve_data.php", data, options)

        .map(res => res.json())

        .subscribe(res => {
          loader.dismiss();

          this.items = res.server_response;
          this.telephone = res.server_response[0].telephone
          this.email = res.server_response[0].email

          console.log(this.items);
        });
    });
  }
  Edit() {
    this.username = this.navParams.get("username");

    this.oldTelephoneValue = this.navParams.get("telephone");

    this.oldEmailValue = this.navParams.get("email");

    if (this.newtelephone.value == "") {
      let alert = this.alertCtrl.create({
        title: "ATTENTION",

        subTitle: "Country field is empty",

        buttons: ["OK"]
      });

      alert.present();
    } else if (this.newemail.value == "") {
      let alert = this.alertCtrl.create({
        title: "ATTENTION",

        subTitle: "Country field is empty",

        buttons: ["OK"]
      });

      alert.present();
    } else {
      var headers = new Headers();

      headers.append("Accept", "application/json");

      headers.append("Content-Type", "application/json");

      let options = new RequestOptions({ headers: headers });

      let data = {
        username: this.username,
        telephone: this.oldTelephoneValue,

        email: this.oldEmailValue,

        newemail: this.newemail.value,

        newtelephone: this.newtelephone.value
      };

      let loader = this.loading.create({
        content: "Processing please wait…"
      });

      loader.present().then(() => {
        this.http
          .post("http://manocamera.com/api/edit_data.php", data, options)

          .map(res => res.json())

          .subscribe(res => {
            loader.dismiss();

            if (res == "data update successfull") {
              let alert = this.alertCtrl.create({
                title: "CONGRATS",

                subTitle: res,

                buttons: ["OK"]
              });

              alert.present();

              //this.navCtrl.push(ContactPage);
            } else {
              let alert = this.alertCtrl.create({
                title: "ERROR",

                subTitle: "Canot update",

                buttons: ["OK"]
              });

              alert.present();
            }
          });
      });
    }
  }
  //doRefresh(refresher) {

  //console.log('Begin async operation', refresher);

  //setTimeout(() => {
  //this.jobsData.load().then(res => {
  //  this.jobs = res;
  // });
  //refresher.complete();
  //}, 2000);
  // }

  doRefresh(refresher) {
    console.log("Begin async operation", refresher);

    setTimeout(() => {
      this.load();
      console.log("Async operation has ended");
      refresher.complete();
    }, 2000);
  }
}
