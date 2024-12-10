```php
function processData(array $data): array {
    $processedData = [];
    foreach ($data as $value) {
        if (is_array($value)) {
            $processedData[] = processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, ',') !== false) {
            $processedData[] = explode(',', $value); // Explode string into array
        } else {
            $processedData[] = $value;
        }
    }
    return $processedData; // Return a new array
}

$data = ['a', 'b,c', ['d', 'e,f']];
$result = processData($data);
var_dump($result);
```