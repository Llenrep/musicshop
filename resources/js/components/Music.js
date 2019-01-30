import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Music extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <div className="card">
                            <div className="player">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Music />, document.getElementById('example'));
}
