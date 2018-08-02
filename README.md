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

### License

GIT Version is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).