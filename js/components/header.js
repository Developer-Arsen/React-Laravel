import React, { Component } from 'react';
import ReactDOM from 'react-dom';


 class Header extends Component {
  

      render() {
        return (
          <div className="header_part">
          <div id="header_info">
             <nav className="navbar navbar-default navbar-static-top">
                <ul>
                   <img className = "laravel-logo" src="../images/laravel.png" alt="" ></img>
                   <img className = "plus" src="../images/plus.png" alt="" ></img>
                   <img className = "logo" src="../images/React-logo.png" alt="" ></img>
                   <img className = "plus" src="../images/plus.png" alt="" ></img>
                   <img className = "avatar" src="../images/avatar.jpg" alt="" ></img>
                </ul>
                <div className="container_nav col-xs-12">
                   <div id="header-info">
                      <ul>
                         <span className="header-info" ><i className="fa fa-phone" 
                            ></i> <a>091106837</a> </span>
                         <span className="header-info" ><i className="fa fa-address-book" 
                            ></i>  <a>developer.arsenmkhitaryan@gmail.com</a></span>
                         <span className="header-info" ><a><i className="fa fa-facebook" 
                            ></i> </a> </span>
                         <span className="header-info" ><a><i className="fa fa-twitter" 
                            ></i> </a> </span>
                         <span className="header-info" ><a><i className="fa fa-linkedin" 
                            ></i>  </a></span>
                         <span className="header-info" ><a><i className="fa fa-google-plus" 
                            ></i> </a> </span>
                         <span className="header-info" ><a href="login">Sign in </a> </span>
                      </ul>
                   </div>
                </div>
             </nav>
          </div>
          <img className="header_backg" src="../images/background.jpg" alt=""></img> 
       </div>
                  
        );
      }
        
    }
    export default Header;
   