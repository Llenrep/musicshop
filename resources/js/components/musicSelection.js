import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Music extends Component {

    contructor() {
        super();
        this.state = {
            music =[]
        }
        console.log(super());
    }

    render() {
        return (
            <div className="container">
                <h1>Helloooooooo</h1>
            </div>
        );
    }
}

if (document.getElementById('example2')) {
    ReactDOM.render(<Music />, document.getElementById('example2'));
}
