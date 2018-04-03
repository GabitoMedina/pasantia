SucreCoin integration/staging tree
================================
http://www.sucrecoin.org
Copyright (c) 2009-2014 Bitcoin Developers
Copyright (c) 2017 SucreCoin Fork Source

Que es SucreCoin?
----------------
Es una cryptomoneda, descentralizada. 
Tiene una emision de 21.2 millones de coins.
Tiempo entre recompensa, 10 minutos.
Tiempo entre ajuste de red 20 minutos. 

License
-------

SucreCoin is released under the terms of the MIT license. See `COPYING` for more
information or see http://opensource.org/licenses/MIT.

Development process
-------------------

Developers work in their own trees, then submit pull requests when they think
their feature or bug fix is ready.

If it is a simple/trivial/non-controversial change, then one of the SucreCoin
development team members simply pulls it.

If it is a *more complicated or potentially controversial* change, then the patch
submitter will be asked to start a discussion with the devs and community.

The patch will be accepted if there is broad consensus that it is a good thing.
Developers should expect to rework and resubmit patches if the code doesn't
match the project's coding conventions (see `doc/coding.txt`) or are
controversial.

The `master` branch is regularly built and tested, but is not guaranteed to be
completely stable. [Tags](https://github.com/sucrecoin-project/sucrecoin/tags) are created
regularly to indicate new official, stable release versions of SucreCoin.

Testing
-------

Testing and code review is the bottleneck for development; we get more pull
requests than we can review and test. Please be patient and help out, and
remember this is a security-critical project where any mistake might cost people
lots of money.

### Automated Testing

Developers are strongly encouraged to write unit tests for new code, and to
submit new unit tests for old code.

Unit tests for the core code are in `src/test/`. To compile and run them:

    cd src; make -f makefile.unix test

Unit tests for the GUI code are in `src/qt/test/`. To compile and run them:

    qmake BITCOIN_QT_TEST=1 -o Makefile.test bitcoin-qt.pro
    make -f Makefile.test
    ./sucrecoin-qt_test
    
Errors
-------

COMPILE ERROR 
----------

Building LevelDB ...
make[1]: Entering directory '/root/sucrecoin/src/leveldb'
/bin/sh: 1: ./build_detect_platform: Permission denied

Solved * 
**************
cd /src/ 
sudo chmod 755 *
cd /src/leveldb
sudo chdmod 755 * 

----------
Error # 2 
----------

alert.cpp:258:1: fatal error: opening dependency file obj/alert.d: No such file or directory
 }
 ^
compilation terminated.
makefile.unix:186: recipe for target 'obj/alert.o' failed

Solved *
----------

cd src 
mkdir obj
cd leveldb
sudo chmod 755 obj
mkdir obj 
sudo chmod 755 obj 




