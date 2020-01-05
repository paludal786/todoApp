define({ "api": [
  {
    "type": "post",
    "url": "/todo/add",
    "title": "Add Todo",
    "name": "Add_activity",
    "group": "Todo",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "task",
            "description": "<p>Add Your Activities.</p>"
          },
          {
            "group": "Success 200",
            "type": "DateTime",
            "optional": false,
            "field": "time",
            "description": "<p>Select Date and Time.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response",
          "content": "HTTP/1.1 200 OK\n{\n  \"task\": \"Buy BMW\",\n  \"time\": \"17-01-20 01:59 PM\"\n}",
          "type": "json"
        },
        {
          "title": "Validation-Error",
          "content": "HTTP/1.1 422 OK\n{\n \"task\": \"The task field is required\".\n \"time\": \"The task field is required\".\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/todoAdd.js",
    "groupTitle": "Todo"
  },
  {
    "type": "post",
    "url": "/todo/{id}/edit",
    "title": "Edit Todo",
    "name": "Edit_activity",
    "group": "Todo",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Activity unique ID.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "task",
            "description": "<p>Add Your Activities.</p>"
          },
          {
            "group": "Success 200",
            "type": "DateTime",
            "optional": false,
            "field": "time",
            "description": "<p>Select Date and Time.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response",
          "content": "HTTP/1.1 200 OK\n{\n  \"id\":1\n  \"task\": \"Buy BMW\",\n  \"time\": \"17-01-20 01:59 PM\"\n}",
          "type": "json"
        },
        {
          "title": "Validation-Error",
          "content": "HTTP/1.1 422 OK\n{\n \"id\" : \"The id field is required\"\n \"task\": \"The task field is required\".\n \"time\": \"The task field is required\".\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/todoEdit.js",
    "groupTitle": "Todo"
  },
  {
    "type": "post",
    "url": "/todo/{id}/perticular-list",
    "title": "Perticular List activity",
    "name": "List_Perticular_activity",
    "group": "Todo",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Activity unique ID.</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response",
          "content": "HTTP/1.1 200 OK\n{\n    [\n          \"task\": \"Buy BMW\",\n          \"time\": \"17-01-20 01:59 PM\"\n    ]\n}",
          "type": "json"
        },
        {
          "title": "Validation-Error",
          "content": "HTTP/1.1 422 OK\n{\n \"task\": \"The task field is required\".\n \"time\": \"The task field is required\".\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "apidoc/todoPerticularList.js",
    "groupTitle": "Todo"
  }
] });
