import React from 'react';
import ReactDOM from 'react-dom';
// import './index.css';
import Landing from './Landing';
import { BrowserRouter, Route } from 'react-router-dom'


const app = document.getElementById('root');

ReactDOM.render(
    <BrowserRouter >
        <Route path="/" component={Landing}>

        </Route>
    </BrowserRouter>,
    app);

