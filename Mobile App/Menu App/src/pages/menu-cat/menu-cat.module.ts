import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { MenuCatPage } from './menu-cat';

@NgModule({
  declarations: [
    MenuCatPage,
  ],
  imports: [
    IonicPageModule.forChild(MenuCatPage),
  ],
})
export class MenuCatPageModule {}
