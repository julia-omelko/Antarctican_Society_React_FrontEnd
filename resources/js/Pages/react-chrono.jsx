import React from "react";
//import "./styles.css";
import { Chrono } from "react-chrono";
import meow from "./data";
import "./TitlebarImageList";
import "./Header";
import Header from "./Header";
import TitlebarImageList from "./TitlebarImageList";

const items = [
    {
        title: "May 1940",
        contentTitle: "Dunkirk",
        contentText:
            "Men of the British Expeditionary Force (BEF) wade out to a destroyer during the evacuation from Dunkirk.",
        contentDetailedText:
            "On 10 May 1940, Hitler began his long-awaited offensive in the west...",
    },
];

<div style={{ width: "700px", height: "600px" }}>
    <Chrono items={meow} useReadMore={false} />
</div>;
