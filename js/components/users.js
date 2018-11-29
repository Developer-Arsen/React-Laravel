import React, { Component } from 'react';
import ReactDOM from 'react-dom';


 class Users extends Component {
 

      render() {
        var  id = '{{ $user ->id }}'
        return (
         
           
            <h1>{id}</h1>
         
        );
      }
        
    }
    export default Users;
   