import ReactDOM from 'react-dom/client';
import React from "react";
import HelloWorld from "./src/component/HelloWorld";

const root = ReactDOM.createRoot(
    document.getElementById('workerReactApplication')
);

root.render(<HelloWorld/>);