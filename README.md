# LoggerAware - easily and transparently add logger support to a class

## Introduction

The LoggerAware library provides two things: a LoggerAware trait which adds logger support to a class, and a NullLogger class which allows logger support to be optional.

The problem which this library aims to solve is that of adding logging support to a class in as lightweight and transparent a manner as possible. Best practice dictates that a Logger service should be injected into any class which requires it, but to do this means adding code to the class which does not contribute to the behaviour of the class (logging should be an optional behaviour; it is not a required function of most classes) furthermore, if injection of the logger is optional then the class doing the logging must check each time it wants to log that a logger is actually present. This adds further overhead.

This library abstracts this code away into a trait which can be added to any class requiring the logger. The trait provides a setLogger() method allowing a logger to be injected and a getLogger() method by which the class can obtain the logger. If no logger is injected a NullLogger is provided, which provides all the logging methods but performs no actions. This allows classes to be certain they can call logging methods.

## Usage

Adding logger support to a class is as simple as adding the trait:

```php
use DanDMartin\LoggerAware\Traits\LoggerAware;

class MyClass
{
	use LoggerAware;

	public function doSomething()
	{
		$this->getLogger()->info('Doing something');
		// do something...
	}
}
```

Now, if a logger is available, MyClass will use it to write log messages. By default, the NullLogger will be used and nothing will happen, but it's a simple matter to inject a different logger:

```php
$myClass = new MyClass();
$logger = new \Monolog\Logger('logger');

$myClass->setLogger($logger);
$myClass->doSomething();
```

Now all logging will be performed by the injected logger.


