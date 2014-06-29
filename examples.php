<?php

$json = '{
    "pullrequest_merged": {
        "description": "",
        "title": "Inbox changes",
        "close_source_branch": true,
        "destination": {
            "commit": {
                "hash": "82d48819e5f7",
                "links": {
                    "self": {
                        "href": "https://api.bitbucket.org/2.0/repositories/evzijst/bitbucket2/commit/82d48819e5f7"
                    }
                }
            },
            "repository": {
                "links": {
                    "self": {
                        "href": "https://api.bitbucket.org/2.0/repositories/evzijst/bitbucket2"
                    },
                    "avatar": {
                        "href": "https://bitbucket.org/m/d864f6bcaa94/img/language-avatars/default_16.png"
                    }
                },
                "full_name": "evzijst/bitbucket2",
                "name": "bitbucket2"
            },
            "branch": {
                "name": "staging"
            }
        },
        "reason": "",
        "source": {
            "commit": {
                "hash": "325625d47b0a",
                "links": {
                    "self": {
                        "href": "https://api.bitbucket.org/2.0/repositories/evzijst/bitbucket2/commit/325625d47b0a"
                    }
                }
            },
            "repository": {
                "links": {
                    "self": {
                        "href": "https://api.bitbucket.org/2.0/repositories/evzijst/bitbucket2"
                    },
                    "avatar": {
                        "href": "https://bitbucket.org/m/d864f6bcaa94/img/language-avatars/default_16.png"
                    }
                },
                "full_name": "evzijst/bitbucket2",
                "name": "bitbucket2"
            },
            "branch": {
                "name": "mfrauenholtz/inbox"
            }
        },
        "state": "MERGED",
        "author": {
            "username": "evzijst",
            "display_name": "Erik van Zijst",
            "links": {
                "self": {
                    "href": "https://api.bitbucket.org/2.0/users/evzijst"
                },
                "avatar": {
                    "href": "https://bitbucket-staging-assetroot.s3.amazonaws.com/c/photos/2013/Oct/28/evzijst-avatar-3454044670-3_avatar.png"
                }
            }
        },
        "date": "2013-11-08T19:49:12.233187+00:00"
    }
}';

$json2 = '{
    "canon_url": "https://bitbucket.org",
    "commits": [
        {
            "author": "marcus",
            "branch": "master",
            "files": [
                {
                    "file": "somefile.py",
                    "type": "modified"
                }
            ],
            "message": "Added some more things to somefile.py\n",
            "node": "620ade18607a",
            "parents": [
                "702c70160afc"
            ],
            "raw_author": "Marcus Bertrand <marcus@somedomain.com>",
            "raw_node": "620ade18607ac42d872b568bb92acaa9a28620e9",
            "revision": null,
            "size": -1,
            "timestamp": "2012-05-30 05:58:56",
            "utctimestamp": "2012-05-30 03:58:56+00:00"
        }
    ],
    "repository": {
        "absolute_url": "/marcus/project-x/",
        "fork": false,
        "is_private": true,
        "name": "Project X",
        "owner": "marcus",
        "scm": "git",
        "slug": "project-x",
        "website": "https://atlassian.com/"
    },
    "user": "marcus"
}';
