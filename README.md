This is a POC for Applitools. 

**You would need to be in the terminal for these steps**

Steps to run:
## clone the repository
run the command `git clone https://gitlab.com/ranjani.amirth/POC-Applitools.git`
## run "composer install"
You would need to `cd POC-Applitools` 

Then run the command `composer install`
## start selenium server in a separate tab in the repo you cloned
run the command `java -jar selenium-server-standalone-3.4.0.jar`
## In another tab, Execute the testcase in parallel
`vendor/bin/paratest -p2 -f -c phpunit.xml --testsuite Paratest  --log-junit tmp/Applitools_smokeParallelTest.xml ||:
`
 
## Run the test :

```
1. You can change the host name to saucelabs
2. There is one test that passes and another that fails
3. You can duplicate the same suite and run all the 4 tests in parallel using jenkins pipleine to see the sauce failure listing ```


 