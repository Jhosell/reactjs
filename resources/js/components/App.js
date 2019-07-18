import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter, Route, Switch } from "react-router-dom";
import CourseList from './CourseList';
import NotFound from './NotFound';
import SingleCourse from './SingleCourse';


const App = () => {
    return (
        <div className="container">
            <div className="title m-b-md">
                <h1 className="text-center fuente1">CURSOS</h1>
            </div>
                <div className="row justify-content-center">
                    <CourseList/>
                </div>
        </div>
        )
     }

const Root = () => (
    <HashRouter>
        <Switch>
            <Route path="/" exact component={App} />
            <Route path="/cursos/:id" exact component={SingleCourse} />
            <Route component={NotFound} />
        </Switch>
    </HashRouter>
)

if (document.getElementById('app')) {
    ReactDOM.render(<Root/>, document.getElementById('app'));
}
