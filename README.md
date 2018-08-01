# Git Version
Gets the git version and returns it as a string.

### Usage
<p>Pull in the composer package by running the command below:</p>

```
composer require oliveris/git-version
```

<p>Import the namspace inot the class (autoloading)</p>

```
use GitVersion\GitVersion
```

## Examples

### To get the git version string
<p>Below is an example that returns a string of the git version.</p>

```
GitVersion::getVersion()
```

### License

GIT Version is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).