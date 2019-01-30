import React, { Component } from 'react';
import ReactDOM from 'react-dom';



export default class Example extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="container" id="body">
                    <div className="row justify-content-center">
                        <div className="col-md-12">
                            <div className="card">
                                <div className="Cardigan">
                                    Au
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
