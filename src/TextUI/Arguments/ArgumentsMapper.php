<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Arguments;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ArgumentsMapper
{
    public function mapToLegacyArray(Arguments $arguments): array
    {
        $result = [
            'listGroups'              => false,
            'listSuites'              => false,
            'listTests'               => false,
            'listTestsXml'            => false,
            'loader'                  => null,
            'useDefaultConfiguration' => true,
            'loadedExtensions'        => [],
            'notLoadedExtensions'     => [],
            'warnings'                => [],
        ];

        // TODO Move somewhere else vvv

        if ($arguments->hasGenerateConfiguration() && $arguments->generateConfiguration()) {
        }

        if ($arguments->hasAtLeastVersion() && $arguments->atLeastVersion()) {
        }

        if ($arguments->hasVersion() && $arguments->version()) {
        }

        if ($arguments->hasCheckVersion() && $arguments->checkVersion()) {
        }

        if ($arguments->hasIniSettings()) {
            foreach ($arguments->iniSettings() as $name => $value) {
                \ini_set($name, $value);
            }
        }

        // TODO Move somewhere else ^^^

        if ($arguments->hasColors()) {
            $result['colors'] = $arguments->colors();
        }

        if ($arguments->hasBootstrap()) {
            $result['bootstrap'] = $arguments->bootstrap();
        }

        if ($arguments->hasCacheResult()) {
            $result['cacheResult'] = $arguments->cacheResult();
        }

        if ($arguments->hasCacheResultFile()) {
            $result['cacheResultFile'] = $arguments->cacheResultFile();
        }

        if ($arguments->hasColumns()) {
            $result['columns'] = $arguments->columns();
        }

        if ($arguments->hasConfiguration()) {
            $result['configuration'] = $arguments->configuration();
        }

        if ($arguments->hasCoverageClover()) {
            $result['coverageClover'] = $arguments->coverageClover();
        }

        if ($arguments->hasCoverageCrap4J()) {
            $result['coverageCrap4J'] = $arguments->coverageCrap4J();
        }

        if ($arguments->hasCoverageHtml()) {
            $result['coverageHtml'] = $arguments->coverageHtml();
        }

        if ($arguments->hasCoveragePhp()) {
            $result['coveragePHP'] = $arguments->coveragePhp();
        }

        if ($arguments->hasCoverageText()) {
            $result['coverageText'] = $arguments->coverageText();
        }

        if ($arguments->hasCoverageTextShowUncoveredFiles()) {
            $result['coverageTextShowUncoveredFiles'] = $arguments->hasCoverageTextShowUncoveredFiles();
        }

        if ($arguments->hasCoverageTextShowOnlySummary()) {
            $result['coverageTextShowOnlySummary'] = $arguments->coverageTextShowOnlySummary();
        }

        if ($arguments->hasCoverageXml()) {
            $result['coverageXml'] = $arguments->coverageXml();
        }

        if ($arguments->hasDebug()) {
            $result['debug'] = $arguments->debug();
        }

        if ($arguments->hasHelp()) {
            $result['help'] = $arguments->help();
        }

        if ($arguments->hasFilter()) {
            $result['filter'] = $arguments->filter();
        }

        if ($arguments->hasTestSuite()) {
            $result['testsuite'] = $arguments->testSuite();
        }

        if ($arguments->hasGroups()) {
            $result['groups'] = $arguments->groups();
        }

        if ($arguments->hasExcludeGroups()) {
            $result['excludeGroups'] = $arguments->excludeGroups();
        }

        if ($arguments->hasTestSuffixes()) {
            $result['testSuffixes'] = $arguments->testSuffixes();
        }

        if ($arguments->hasIncludePath()) {
            $result['includePath'] = $arguments->includePath();
        }

        if ($arguments->hasListGroups()) {
            $result['listGroups'] = $arguments->listGroups();
        }

        if ($arguments->hasListSuites()) {
            $result['listSuites'] = $arguments->listSuites();
        }

        if ($arguments->hasListTests()) {
            $result['listTests'] = $arguments->listTests();
        }

        if ($arguments->hasListTestsXml()) {
            $result['listTestsXml'] = $arguments->listTestsXml();
        }

        if ($arguments->hasPrinter()) {
            $result['printer'] = $arguments->printer();
        }

        if ($arguments->hasLoader()) {
            $result['loader'] = $arguments->loader();
        }

        if ($arguments->hasJunitLogfile()) {
            $result['junitLogfile'] = $arguments->junitLogfile();
        }

        if ($arguments->hasTeamcityLogfile()) {
            $result['teamcityLogfile'] = $arguments->teamcityLogfile();
        }

        if ($arguments->hasExecutionOrder()) {
            $result['executionOrder'] = $arguments->executionOrder();
        }

        if ($arguments->hasExecutionOrderDefects()) {
            $result['executionOrderDefects'] = $arguments->executionOrderDefects();
        }

        if ($arguments->hasResolveDependencies()) {
            $result['resolveDependencies'] = $arguments->resolveDependencies();
        }

        if ($arguments->hasProcessIsolation()) {
            $result['processIsolation'] = $arguments->processIsolation();
        }

        if ($arguments->hasRepeat()) {
            $result['repeat'] = $arguments->repeat();
        }

        if ($arguments->hasStderr()) {
            $result['stderr'] = $arguments->stderr();
        }

        if ($arguments->hasStopOnDefect()) {
            $result['stopOnDefect'] = $arguments->stopOnDefect();
        }

        if ($arguments->hasStopOnError()) {
            $result['stopOnError'] = $arguments->stopOnError();
        }

        if ($arguments->hasStopOnFailure()) {
            $result['stopOnFailure'] = $arguments->stopOnFailure();
        }

        if ($arguments->hasStopOnWarning()) {
            $result['stopOnWarning'] = $arguments->stopOnWarning();
        }

        if ($arguments->hasStopOnIncomplete()) {
            $result['stopOnIncomplete'] = $arguments->stopOnIncomplete();
        }

        if ($arguments->hasStopOnRisky()) {
            $result['stopOnRisky'] = $arguments->stopOnRisky();
        }

        if ($arguments->hasStopOnSkipped()) {
            $result['stopOnSkipped'] = $arguments->stopOnSkipped();
        }

        if ($arguments->hasFailOnWarning()) {
            $result['failOnWarning'] = $arguments->failOnWarning();
        }

        if ($arguments->hasFailOnRisky()) {
            $result['failOnRisky'] = $arguments->failOnRisky();
        }

        if ($arguments->hasTestdoxGroups()) {
            $result['testdoxGroups'] = $arguments->testdoxGroups();
        }

        if ($arguments->hasTestdoxExcludeGroups()) {
            $result['testdoxExcludeGroups'] = $arguments->testdoxExcludeGroups();
        }

        if ($arguments->hasTestdoxHtmlFile()) {
            $result['testdoxHTMLFile'] = $arguments->testdoxHtmlFile();
        }

        if ($arguments->hasTestdoxTextFile()) {
            $result['testdoxTextFile'] = $arguments->testdoxTextFile();
        }

        if ($arguments->hasTestdoxXmlFile()) {
            $result['testdoxXMLFile'] = $arguments->testdoxXmlFile();
        }

        if ($arguments->hasUseDefaultConfiguration()) {
            $result['useDefaultConfiguration'] = $arguments->useDefaultConfiguration();
        }

        if ($arguments->hasNoExtensions()) {
            $result['noExtensions'] = $arguments->noExtensions();
        }

        if ($arguments->hasNoCoverage()) {
            $result['noCoverage'] = $arguments->noCoverage();
        }

        if ($arguments->hasNoLogging()) {
            $result['notLogging'] = $arguments->noLogging();
        }

        if ($arguments->hasNoInteraction()) {
            $result['noInteraction'] = $arguments->noInteraction();
        }

        if ($arguments->hasBackupGlobals()) {
            $result['backupGlobals'] = $arguments->backupGlobals();
        }

        if ($arguments->hasBackupStaticAttributes()) {
            $result['backupStaticAttributes'] = $arguments->backupStaticAttributes();
        }

        if ($arguments->hasVerbose()) {
            $result['verbose'] = $arguments->verbose();
        }

        if ($arguments->hasReportUselessTests()) {
            $result['reportUselessTests'] = $arguments->reportUselessTests();
        }

        if ($arguments->hasStrictCoverage()) {
            $result['strictCoverage'] = $arguments->strictCoverage();
        }

        if ($arguments->hasDisableCodeCoverageIgnore()) {
            $result['disableCodeCoverageIgnore'] = $arguments->disableCodeCoverageIgnore();
        }

        if ($arguments->hasBeStrictAboutChangesToGlobalState()) {
            $result['beStrictAboutChangesToGlobalState'] = $arguments->beStrictAboutChangesToGlobalState();
        }

        if ($arguments->hasDisallowTestOutput()) {
            $result['disallowTestOutput'] = $arguments->disallowTestOutput();
        }

        if ($arguments->hasBeStrictAboutResourceUsageDuringSmallTests()) {
            $result['beStrictAboutResourceUsageDuringSmallTests'] = $arguments->beStrictAboutResourceUsageDuringSmallTests();
        }

        if ($arguments->hasDefaultTimeLimit()) {
            $result['defaultTimeLimit'] = $arguments->defaultTimeLimit();
        }

        if ($arguments->hasEnforceTimeLimit()) {
            $result['enforceTimeLimit'] = $arguments->enforceTimeLimit();
        }

        if ($arguments->hasDisallowTodoAnnotatedTests()) {
            $result['disallowTodoAnnotatedTests'] = $arguments->disallowTodoAnnotatedTests();
        }

        if ($arguments->hasReverseList()) {
            $result['reverseList'] = $arguments->reverseList();
        }

        if ($arguments->hasWhitelist()) {
            $result['whitelist'] = $arguments->whitelist();
        }

        if ($arguments->hasRandomOrderSeer()) {
            $result['randomOrderSeed'] = $arguments->randomOrderSeed();
        }

        if ($arguments->hasXdebugFilterFile()) {
            $result['xdebugFilterFile'] = $arguments->xdebugFilterFile();
        }

        return $result;
    }
}
