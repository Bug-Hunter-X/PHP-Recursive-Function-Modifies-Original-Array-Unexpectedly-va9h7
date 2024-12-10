```php
function processData(array $data): array {
    foreach ($data as &$value) {
        if (is_array($value)) {
            $value = processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, ',') !== false) {
            $value = explode(',', $value); // Explode string into array
        }
    }
    return $data; //Return the modified data
}

$data = ['a', 'b,c', ['d', 'e,f']];
$result = processData($data);
var_dump($result);
```