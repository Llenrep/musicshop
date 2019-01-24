import React, { Component } from 'react';
import './App.css';
import Navbar from './Components/Navbar/Navbar'
import gNavbar from './Components/GenNavbar/gNavbar'
import bG from './Components/images/absractatronomy.jpg'

var backgroundStyle = { //regular font for the entirety of the section. more so the introduction though
  width: "100%",
  height: "100%",
  backgroundImage: "url(" + bG + ")",
  opacity: "0.5"
};

class App extends Component {
  render() {
    return (
      <div className="App">
        <Navbar />
        <div style={backgroundStyle}>
          <div>

          </div>


          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>
          <h1>Hello World!</h1>

        </div>
      </div>
    );
  }
}

export default App;
