import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

// <i class="fas fa-pause"></i> for the pause button when the play thing is clicked. Something simple like clicking 

// play = () => {
//     this.setState({ play: true, pause: false })
//     this.audio.play();
// }

// pause = () => {
//     this.setState({ play: false, pause: true })
//     this.audio.pause();
// }


export default class Music extends Component {

    //okay gotta start psuedo coding. we need a function to change the state of playing
    //within the music array in state, it should have an array of all the available songs just there.

    constructor() {
        super();
        console.log(super());

        this.state = {
            music: [],
            play: false,
            pause: true,
            file: 'https://soundcloud.com/dj-triet-lpbp/ocean-base-louispierreprod',
        }
    }


    componentWillMount() {
        axios.get('/shop').then(response => {
            this.setState({
                music: response.data
            });
        }).catch(error => {
            console.log(error)
        })

        console.log(this.state.music)
    }

    render() {
        return (
            <div className="alltogether">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-md-12">
                            <div className="card">
                                <div className="player">
                                    <div className="controls">
                                        <a href="javascript:void();"><i className="fa fa-chevron-left" aria-hidden="true"></i></a>
                                        <a href="javascript:void();"><i className="fa fa-play" aria-hidden="true"></i></a>
                                        <a href="javascript:void();"><i className="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div className="musicControl">
                                        <div className="progress">
                                            <div className="bar"></div>
                                        </div>
                                    </div>

                                    <div className="actions">
                                        <a href="javascript:void();"><i className="fas fa-thumbs-up" aria-hidden="true"></i></a>
                                        <a href="javascript:void();"><i className="fas fa-dollar-sign" aria-hidden="true"></i></a>
                                        <a href="javascript:void();"><i className="far fa-envelope" aria-hidden="true"></i></a>
                                        <a href="javascript:void();"><i className="fas fa-ellipsis-h" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <audio ref="player" autoPlay={true}>
                    <source src={this.state.file} />
                </audio>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Music />, document.getElementById('example'));
}
