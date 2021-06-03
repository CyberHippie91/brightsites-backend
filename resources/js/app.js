
require('./bootstrap');



require('./Index');
require('./resources/js/components/dash/Dash');







import LogoBanner from '/resources/js/components/header/logobanner';
import 'resources/js/components/index.css';
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Link, Route, Switch} from 'react-router-dom';
import Main from './node_modules/react-router-dom/Router';
import 'bootstrap/dist/css/bootstrap.min.css'




export default function App({ Component, pageProps }) {
    return <Component {...pageProps} />;
  }