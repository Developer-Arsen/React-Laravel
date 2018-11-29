import React, { Component } from 'react';
import ReactDOM from 'react-dom';

//------IMPORTING OUR JSX FILES HERE
import Header from './header.js';
import Body from './body.js';
import Footer from './footer.js';
import Users from './users.js';



 if (document.getElementById('header')) {
ReactDOM.render(<Header />, document.getElementById('header'));
 }
 if (document.getElementById('body')) {
  ReactDOM.render(<Body />, document.getElementById('body'));
   }
 if (document.getElementById('footer')) {
ReactDOM.render(<Footer />, document.getElementById('footer'));
 }
 if (document.getElementById('users')) {
  ReactDOM.render(<Users />, document.getElementById('users'));
   }

if (module.hot) {
  module.hot.accept();
  }