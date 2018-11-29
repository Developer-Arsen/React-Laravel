import React, { Component } from 'react';
import ReactDOM from 'react-dom';


 class Footer extends Component {
  

      render() {
        return (
          <div className="container-fluid">
          <div className="row">
             <div className="col-xs-12 col-md-6">
                <div className="col-xs-4">
                   <div className="footer_navigation">
                      <h4>Product</h4>
                      <ul className="nav footer-nav">
                         <li><a href="/" className="page-scroll">Home</a></li>
                         <li><a href="/" className="page-scroll">Features</a></li>
                         <li><a href="/" className="page-scroll">Time Tracking</a></li>
                         <li><a href="/" className="page-scroll">Download</a></li>
                      </ul>
                   </div>
                </div>
                <div className="col-xs-4">
                   <div className="footer_navigation">
                      <h4>PRICE</h4>
                      <ul className="nav footer-nav">
                         <li><a href="/">Individuals</a></li>
                         <li><a href="/">Teams &amp; Companies</a></li>
                         <li><a href="/">Custom Solutions</a></li>
                         <li><a href="/">How it Works?</a></li>
                      </ul>
                   </div>
                </div>
                <div className="col-xs-4">
                   <div className="footer_navigation">
                      <h4>MORE information</h4>
                      <ul className="nav footer-nav">
                         <li><a href="/">Home </a></li>
                         <li><a href="/">Home User Types</a></li>
                         <li><a href="/">Home Screenshot Modes</a></li>
                         <li><a href="/">Home Reports</a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div className="col-xs-12 col-md-6">
                <div className="col-xs-4 col-md-5">
                   <div className="footer_navigation">
                      <h4>ANY QUESTIONS?</h4>
                      <ul className="nav footer-nav">
                         <li><a href="/">Privacy policy</a></li>
                         <li><a href="/">Terms of service</a></li>
                         <li><a href="/">Contact us</a></li>
                         <li><a href="/">FAQ</a></li>
                      </ul>
                   </div>
                </div>
                <div className="col-xs-7 col-md-7">
                   <div className="pull-left footer_navigation">
                      <h4>ABOUT website</h4>
                      <form className="navbar-form">
                         <div className="form-group">
                            <input type="text" className="form-control" placeholder="Your email address"></input>
                         </div>
                         <button type="submit" className="btn btn-default"><i className="fa fa-arrow-circle-o-right"
                            aria-hidden="true"></i></button>
                         <p>Get the most recent updates from our site and be updated your self...</p>
                      </form>
                   </div>
                </div>
             </div>
          
       </div>
    
       </div>
        );
      }
        
    }
    export default Footer;
   