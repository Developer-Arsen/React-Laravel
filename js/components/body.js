import React, { Component } from 'react';
import ReactDOM from 'react-dom';



 class Body extends Component {
  

      render() {
        return (
          <div className = "body" >
          <img className="Avatar" src=" ../images/avatar.jpg"></img>
          <p>Hi! I am Arsen, a Full Stack Developer. 
             I am an armenian 15 year old boy, living in Yerevan<br></br> 
             a student at Shirakatsy Lyceum. I’ m interested in programming.<br></br>
             <strong>Also The Owner Of This Website!</strong>
          </p>
          <input type="email" placeholder="Your email" />
          <input type="submit" />
          <div className="buttons">
             <span className="query">
                <a className="button" href="register ">
                   <oblique> User Account </oblique>
                </a>
             </span>
             <span className="query">
                <a className="button" href="main_page">
                   <oblique>  Main Page | All Users</oblique>
                </a>
             </span>
             <span className="query">
                <a className="button" href="main_page">
                   <oblique>  Projects </oblique>
                </a>
             </span>
          </div>
          <div className = "login-register">
             <div className="buttons">
                <span className="query">
                   <a className="button" href="login">
                      <oblique>  Login </oblique>
                   </a>
                </span>
                <span className="query">
                   <a className="button" href="register">
                      <oblique>  Register </oblique>
                   </a>
                </span>
             </div>
          </div>
       </div>
        );
      }
        
    }
    export default Body;
   