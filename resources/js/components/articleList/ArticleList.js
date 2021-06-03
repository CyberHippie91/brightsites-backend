import axios from 'axios'

import { Link } from 'react-router-dom'
import Table from 'react-bootstrap/Table'
import React, { useMemo, useState, useEffect } from "react";
import Table from "./Table";

export default class ArticleList extends Component {
    constructor () {
      super()
      this.state = {
        articles: []
      }
    }

    componentDidMount () {
      axios.get('/api/articles').then(response => {
        this.setState({
          articles: response.data
        })
      })
    }

}

const columns = useMemo(
    () => [
      {
    
        Header: "Articles",
        //  group columns
        columns: [
          {
            Header: "Title",
            accessor: "show.title"
          },
          {
            Header: "Genre",
            accessor: "show.genre"
          },
          {
            Header: "Article Content",
            accessor: "show.article_content"
          },
          {
            Header: "Date",
            accessor: "show.timestamp"
          },
         
        ]
      },
     
    ],
    []
  );


