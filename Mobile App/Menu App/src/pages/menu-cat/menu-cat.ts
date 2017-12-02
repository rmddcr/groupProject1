import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

/**
 * Generated class for the MenuCatPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-menu-cat',
  templateUrl: 'menu-cat.html',
})
export class MenuCatPage {

  public meals : any = [];
  public catID;
  public catTitle;
  constructor(public navCtrl: NavController, public navParams: NavParams, public http   : Http) {
    this.catID = navParams.get('catid');
    this.catTitle = navParams.get('cattitle');
  }

  ionViewWillEnter()
  {
     this.load();
  }

  // Retrieve the JSON encoded data from the remote server
   // Using Angular's Http class and an Observable - then
   // assign this to the items array for rendering to the HTML template
   load()
   {
      this.http.get('http://34.238.149.235/test/retrieve-data.php?table=meal_items&catid='+this.catID)
      .map(res => res.json())
      .subscribe(data =>
      {
         this.meals = data;
      });
   }

}
