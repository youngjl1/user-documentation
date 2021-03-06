<?hh // partial

namespace Hack\UserDocumentation\API\Examples\Vector\SetAll;

$v = Vector {'red', 'green', 'blue', 'yellow'};

// Set the elements at 0 and 1
$v->setAll(Vector {'foo', 'bar'});
var_dump($v);

// Set the elements at 2 and 3
$v->setAll(Map {
  2 => 'baz',
  3 => 'qux',
});
var_dump($v);
