import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

/**
 * Generated class for the HomePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-menu',
  templateUrl: 'menu.html',
})
export class MenuPage {
  
  tabBarElement: any;
  splash = true;
  public imageSlider : any [];
  public cats : any = [];
  public itemCount;
  constructor(public navCtrl: NavController, 
    public navParams: NavParams,
    public http   : Http) {
      this.imageSlider = [{image : 'http://www.infomagic.com/uploads/offer_banner/2017/Aug/main9daa525bd45b361e1cd3130e4e83b7b9.jpg'},
                          {image : 'http://swaggrabber.com/wp-content/uploads/2015/06/papa-john-fathers-day-promo.jpg'},
                          {image : 'https://i.pinimg.com/736x/0f/1a/c7/0f1ac722cec9d8d54d31508bbdbce659--restaurant-deals-restaurant-coupons.jpg'},
                          {image : 'https://d2skenm2jauoc1.cloudfront.net/assets/gloriafood/img/promotion-example-1-fbc7556626.png'},
                          {image : 'https://cdn2.hubspot.net/hubfs/2700250/Imported_Blog_Media/restaurant-promotion-html-digital-signage-template.gif'}
    ];
    this.itemCount = this.cats.length;
    this.tabBarElement = document.querySelector('.tabbar');
  }

  // ionViewDidLoad() {
  //   console.log('ionViewDidLoad MenuPage');
  // }

  ionViewDidLoad() {
    this.tabBarElement.style.display = 'none';
    setTimeout(() => {
      this.splash = false;
      this.tabBarElement.style.display = 'flex';
    }, 4000);
  }

  ionViewWillEnter()
  {
     this.load();
     console.log(this.itemCount);
  }

  // Retrieve the JSON encoded data from the remote server
   // Using Angular's Http class and an Observable - then
   // assign this to the items array for rendering to the HTML template
   load()
   {
      this.http.get('http://34.238.149.235/test/retrieve-data.php?table=meal_cat')
      .map(res => res.json())
      .subscribe(data =>
      {
         this.cats = data;
      });
   }

  goToCat(cat,catName) {
    console.log('Category number '+cat+' Loaded.');
    this.navCtrl.push('MenuCatPage',{catid : cat, cattitle : catName});
  }

}
