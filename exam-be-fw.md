# Examen Backend Frameworks Tom Larsen
## Vraag 1
For easy understanding: Model = kitchen, Controller = waiter, View = table
The Model talks to database (like the chef handles the food)
The Controller handles the communication between Model and View (like the waiter gives the order to the kitchen, and brings the dish back to the table)
The View shows whatever the Controller for 'viewing' (The table which now has the dish served)

## Vraag 2
It is the Laravel way of Object Relational Mapping. This allows us to use PHP instead having to send raw SQL queries.
Pro 1: easier to read and understand than long queries
Pro 2: requires less code

Con: it's less performant than raw SQL, could be problematic with very large datasets

## Vraag 3
Don't forget @csrf or it will not work!
User fills in a form in the view, this code
```php
<form method="POST" action="/courses">
	@csrf
	// input goes here
</form
```



Route: sends a request to the controller
```php
Route::post('/courses', [CourseController::class, 'store']);
```
		
Controller: receives the data from the form
```php
   public function store(Request $request)
```
  Validation: checks whether input matches the model input
```php
   $request->validate([
    'title' => 'required'
    ]);
```
  Action: Saving data
```php
  Course::create($validated);
```

Response: redirecting and confirming what happened
```php
 return  redirect()->route('home')->with('success', 'Course added succesfully');
 ```

## Vraag 4
```php
   Course::where('active', 1)->orderBy('title')->get();
```
   Course:: 					= use model named Course
   where('active', 1) 	= where fields active is true
   -> 							= object operator, access properties of object
   orderBy('title')		= sort by title (default is ascending)
   get()							= run query and get me data
#### Raw query:
```sql
SELECT * FROM courses 
WHERE active = 1
ORDER  BY title ASC;
```


## Praktijk:
https://github.com/TommexxL/exam-be-fw

