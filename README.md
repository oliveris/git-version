# Git Version
Helpers around Git Tag versions these include getting the latest version and getting the date of the version.

### Usage
<p>Pull in the composer package by running the command below:</p>

```
composer require oliveris/git-version
```

<p>Import the namspace into the class (autoloading)</p>

```
use GitVersion\GitVersion
```

## Examples

### To get the latest git version string
<p>Below is an example that returns a string of the git version.</p>

```
GitVersion::getLatestVersion()
```

### To get the date a git version was created at
<p>Below is an example that returns a date string the passed version tag was created at. The optional second parameter is a date format you need it to return as.</p>

```
// Get the version you require
$git_version = GitVersion::getLatestVersion()

// Get the date for that version
GitVersion::getVersionDate($git_version, 'd-m-Y')
```

## Tests 
<p>To run the tests set up the package in an environment you can run php and open tests/index.php</p>

## Built With
<ul>
    <li>PHP</li>
</ul>

## Versioning
<p>We use <a href="https://semver.org/spec/v1.0.0.html">Semantic Versioning 1.0.0</a>, for example v1.0.0.</p>

## Authors
<ul>
    <li>Sam Oliveri - Software Developer</li>
</ul>

### License

GIT Version is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).