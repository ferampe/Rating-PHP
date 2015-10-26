# Rating-PHP
 Rating PHP return json
 
 The code calc the vote in JSON format, recives and returns JSON.
 
 
 For example:
 
 Give to method calcVote($json, $star)
 
 $json
 ```json
{"stars" : [{"1":0, "2":0, "3":0, "4":0, "5":0}], "average" : 0 }
```
$star
Which is the star that marked for example the number 3

Will return the JSON

 ```json
{"stars":[{"1":0,"2":0,"3":1,"4":0,"5":0}],"average":3}
```


To implement it we can create two fields in the Data Base rating_html and rating_json.

The class also returns generated html with stars , use the Bootstrap classes, get html Generated whit the method getStarHtml(3)

We can store in the field rating_json the default json rating_html and store the generated html .
