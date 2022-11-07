import { Link } from "@inertiajs/inertia-react";
import React, { useState } from "react";
import "./styles.css";

//import * as React from "react";
import ImageList from "@mui/material/ImageList";
import ImageListItem from "@mui/material/ImageListItem";
import ImageListItemBar from "@mui/material/ImageListItemBar";
//import ListSubheader from "@mui/material/ListSubheader";
import IconButton from "@mui/material/IconButton";
//import InfoIcon from "@mui/icons-material/Info";
//IMAGE IMPORTS
// import pic_one from "/storage/app/public/CWMS358_London_News_photo.jpg";
// import pic_two from "/storage/app/public/CWMS359_RAF_Auster_on_skis.jpg";
// import pic_three from "/storage/app/public/CWMS365_NBSAE_ship_routes.jpg";
// import pic_four from "/storage/app/public/CWMS367_THORSHOVDI in Curacoa.jpg";
// import pic_five from "/storage/app/public/CWMS369_new_deck_on_THORSHOVDI.jpg";
// import pic_six from "/storage/app/public/CWMS371_sledge_dogs_on_THORSHOVDI.jpg";
// import pic_seven from "/storage/app/public/CWMS373_Shackleton_grave.jpg";
// import pic_eight from "/storage/app/public/CWMS374_sperm_whale.jpg";

export default function TitlebarImageList(props) {
    // const [year, setYear] = useState([]);
    // setYear(data.title);
    // let str = props;
    // let n = str.slice(10);

    //const [files, setFiles] = React.useState([]);

    //return props.files.map((files) => typeof files);
    // function YearTest(props) {
    //     if (props.year == "1950") {
    //         //console.log(props.files[props.data.title]);
    //         // this.setYear(props.files);
    //         // console.log(year);
    //         //console.log(this.data.title);
    //         // return <div>'1950s test'</div>;
    //     } else {
    //         // console.log(year);
    //         //console.log({data});
    //         return <div>else 1950s statement {props.year}</div>;
    //     }
    // }
    return (
        <div className="GalleryStyling">
            <div className="GalleryStylingBackground">
                <>
                    {/* <YearTest year={props.year} /> */}
                    {/* <h2>Year is: {props.year}</h2> */}
                    <div className="GalleryStylingInner">
                        <ImageList sx={{ width: 720, height: 600 }}>
                            <ImageListItem
                                key="Subheader"
                                cols={2}
                            ></ImageListItem>
                            {props.files?.map((props, index) => (
                                <ImageListItem key={index}>
                                    {console.log("in the image list item")}
                                    {console.log(index, props)}
                                    <img
                                        src={props}
                                        srcSet={props}
                                        //alt={props.files}
                                        //loading="lazy"
                                    />
                                    <div className="hide_show_description">
                                        <ImageListItemBar
                                            title={props
                                                .replaceAll("_", " ")
                                                .slice(29, -4)}
                                            //subtitle={props}
                                            actionIcon={
                                                <IconButton
                                                    sx={{
                                                        color: "rgba(255, 255, 255, 0.54)",
                                                    }}
                                                    aria-label={`info about ${props.files}`}
                                                ></IconButton>
                                            }
                                        />
                                    </div>
                                </ImageListItem>
                            ))}
                            {/* <img
                                src={
                                    "storage/CWMS369_new_deck_on_THORSHOVDI.jpg"
                                }
                                alt="hello image"
                            /> */}
                        </ImageList>
                    </div>
                </>
            </div>
        </div>
    );
}

//const itemData = [];
